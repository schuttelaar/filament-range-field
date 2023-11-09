<li @click="state = {{ $state }}">
    <span
        class="cursor-pointer text-sm hover:text-primary-500 dark:hover:text-primary-500 font-medium leading-4 text-gray-700 dark:text-gray-300"
        x-bind:class="{
            'dark:text-primary-500 text-primary-500': state === {{ $state }},
        }"
         @isset($step['t']) x-tooltip.raw="{{$step['t']}}" @endisset
    >
        {{ $step['label'] }}
    </span>
</li>
