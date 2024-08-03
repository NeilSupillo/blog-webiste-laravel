@props(['active' => false])
<li>
    <a {{$attributes}} @class([
        'block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0  md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent text',
        'text-blue-500' => $active,
        'text-black dark:text-white' => !$active,
        
    ]) class="">{{$slot}}</a>

  </li>
