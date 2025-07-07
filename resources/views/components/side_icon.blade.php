
<div class="hover:border-r-4 group py-4 w-full hover:border-blue-500 :">

<a {{$attributes->merge()}} class="w-full group "  >
    <svg class="w-8 h-8 mx-auto text-[#cbd5e1] group-hover:text-blue-500 transition"
         fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        {{$slot}}
    </svg>
</a>
</div>


