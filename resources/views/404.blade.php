@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  @if (! have_posts())
    <div class="px-5 md:px-11 mt-8 min-h-[50vh] flex flex-col justify-center">
      <div class="w-full lg:w-2/3">
        <p class="!font-medium text-sm text-grey leading-normal md:text-base md:leading-relaxed mb-8 whitespace-pre-line">
          Hello, 

          We can’t seem to find the page you’re looking for.
          
          Our website has recently undergone a significant refresh to enhance your experience, and it's possible the page has been moved or no longer exists.
          
          We apologise for any inconvenience this may have caused.
         
          Here are some helpful links to get you back on track:
        </p>
        <div class="flex gap-4">
          <a class="flex justify-center items-center w-full py-3 px-6 text-white bg-black rounded-full max-w-[300px]" href="{{ home_url() }}" target="_blank">Home</a>
          <a class="flex justify-center items-center w-full py-3 px-6 text-white bg-black rounded-full max-w-[300px]" href="{{ home_url('/contact-us') }}" target="_blank">Contact Us</a>
        </div>
      </div>
    </div>
  @endif
@endsection
