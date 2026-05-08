<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;
use ReflectionClass;
use Throwable;

/**
 * 自動把所有 Filament Resource 的 model label 轉成繁體中文。
 *
 * 邏輯：
 * 1. Filament panel 啟動後（serving callback），列舉所有已註冊 Resource。
 * 2. 取每個 Resource 的 model class basename（如 "Customer"）。
 * 3. 在 app/Filament/model_labels.php 字典查中文（如「客戶」）。
 * 4. 用 reflection 寫進 Resource::$modelLabel / $pluralModelLabel。
 *
 * 這樣 Filament 內部 getModelLabel() / getPluralModelLabel() 會優先用我們設定的，
 * 不會 fallback 到 get_model_label() helper（產出英文）。
 *
 * 不需要改 188 個 Resource source code。
 */
class FilamentModelLabelsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Filament::serving() 會在每次 request 進到 Filament panel 時跑，
        // 此時所有 Resource 已被 panel discover 並註冊。
        Filament::serving(function (): void {
            $this->applyModelLabels();
        });
    }

    private function applyModelLabels(): void
    {
        $labelsPath = base_path('app/Filament/model_labels.php');
        if (! is_file($labelsPath)) {
            return;
        }

        /** @var array<string, string> $labels */
        $labels = require $labelsPath;

        foreach (Filament::getResources() as $resourceClass) {
            try {
                $modelClass = $resourceClass::getModel();
                $basename = class_basename($modelClass);

                if (! isset($labels[$basename])) {
                    continue;
                }

                $zh = $labels[$basename];
                $this->setStaticProp($resourceClass, 'modelLabel', $zh);
                // 中文不分單複數，pluralModelLabel 用同一個字串
                $this->setStaticProp($resourceClass, 'pluralModelLabel', $zh);
            } catch (Throwable $e) {
                // 個別 Resource 出錯不應阻斷其他 Resource，靜默 skip
                continue;
            }
        }
    }

    private function setStaticProp(string $class, string $prop, mixed $value): void
    {
        $reflection = new ReflectionClass($class);
        if (! $reflection->hasProperty($prop)) {
            return;
        }
        $property = $reflection->getProperty($prop);
        $property->setAccessible(true);
        $property->setValue(null, $value);
    }
}
