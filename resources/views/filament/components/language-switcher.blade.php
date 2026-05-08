@php
    /**
     * 支援的語言清單
     * 鍵：locale code（要與 App\Http\Middleware\SetLocale::SUPPORTED_LOCALES 一致）
     * 值：display label
     *
     * 國旗 SVG 用 emoji 取代複雜的 inline SVG，避免維護負擔。
     */
    $locales = [
        'zh_TW' => ['flag' => '🇹🇼', 'label' => '繁體中文'],
        'en'    => ['flag' => '🇺🇸', 'label' => 'English'],
        'ar'    => ['flag' => '🇸🇦', 'label' => 'العربية'],
    ];

    $currentLocale = app()->getLocale();
    // 若當前 locale 不在支援清單，fallback 到 zh_TW（避免按鈕 render 不出來而「消失」）
    if (!isset($locales[$currentLocale])) {
        $currentLocale = 'zh_TW';
    }
    $current = $locales[$currentLocale];
@endphp

<div class="flex items-center gap-1 px-2" x-data="{ open: false }">
    <div class="relative">
        <button
            @click="open = !open"
            @click.outside="open = false"
            type="button"
            class="flex items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-800 transition"
        >
            <span class="text-lg leading-none">{{ $current['flag'] }}</span>
            <span class="hidden sm:inline">{{ $current['label'] }}</span>
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
        </button>

        <div
            x-show="open"
            x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            class="absolute {{ $currentLocale === 'ar' ? 'left-0' : 'right-0' }} mt-2 w-44 origin-top-right rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5 dark:bg-gray-800 dark:ring-white/10 z-50"
            style="display: none;"
        >
            <div class="py-1">
                @foreach ($locales as $code => $info)
                    @php
                        $isActive = $currentLocale === $code;
                        $activeClass = 'bg-primary-50 text-primary-700 dark:bg-primary-900/50 dark:text-primary-400';
                        $inactiveClass = 'text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700';
                    @endphp
                    <a
                        href="{{ request()->fullUrlWithQuery(['lang' => $code]) }}"
                        class="flex items-center gap-3 px-4 py-2 text-sm {{ $isActive ? $activeClass : $inactiveClass }}"
                    >
                        <span class="text-lg leading-none">{{ $info['flag'] }}</span>
                        <span>{{ $info['label'] }}</span>
                        @if ($isActive)
                            <svg class="w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        @endif
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
