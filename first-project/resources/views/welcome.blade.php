<!DOCTYPE HTML>
<h1>Hello World</h1>

<hr>

{{-- Blade is a templating engine used to execute php code. 
1. It provides a cleaner, more readable, and structured way to write views compared to raw PHP. 
2. Blade compiles templates into plain PHP and caches them, making it very fast. 
3. We can also use raw php code in blade template.
4. Uses {{ }} for safe variable output and {!! !!} for raw output.
--}}
<i><?php echo rand(); ?></i> <!-- Normal PHP code -->
<i>{{rand()}}</i> <!-- Blade syntax -->

<!-- Normal commenting syntax doesn't follow in blade template. It  -->
{{-- HTML-style comments (<!-- -->) do not prevent Blade directives (@if, @elseif, @else, @endif) from being executed. Laravel still processes Blade directives inside HTML comments. --}}

<!-- If else statement -->
{{-- @if($name == 'Jitendra')
    <h1>Hi, {{$name}}</h1>
@elseif($name == 'Jitu')
    <h1>Hi, {{$name}}</h1>
@else
    <h1>Hi, Guest</h1>
@endif --}}

<!-- Looping -->
{{-- @for($i = 0; $i < 10; $i++)
    <h1>{{$i}}</h1>
@endfor --}}

{{-- 
@foreach($names as $name)
    <h1>{{$name}}</h1>
@endforeach --}}


<hr>


@include('Folder.subView', ['var2'=>"Passed data"]) <!-- Including a view in another view and passed data, we can include as many times we want in the same file -->
<!-- We can include a view into multiple view and pass different data -->
 <!-- If we use includeIf method then it will check whether the sub view to be included exist or not -->
<!-- includeWhen, includeUnless, includeFirst -->


<hr>


<!-- Components --> 
<!-- Components are a way to include a view in another view. It is similar to include but it is more structured and organized. -->

{{--
@component('components.alert-cmp', ['type'=>'Success']) 
@endcomponent
<!-- This is the old way to include a component in the view -->
 --}}



<x-alert-cmp arg1="Everything good" arg2="success"/> <!-- This is the new way to include a component in the view -->
<x-alert-cmp arg1="Something went wrong" arg2="error"/> 
<!-- To pass the data, we have to do changes in its php file in app -->

<!-- the name of the attributes and the parameters of  cmp constructor  should be same, order doesn't matter-->

<style>
    .success{
        color: green;
        background-color: lightgreen;
    }
    .error{
        color: black;
        background-color: red;
    }
</style>
<!-- We can apply css acc to the view separately by writing css and including them in component blade file -->

{{--
✅ Use <x-component /> for class-based Blade components (best practice).
✅ Use @include() for simple reusable Blade files.
✅ Use @component if you need a full PHP component with slots.
--}}

<hr>
