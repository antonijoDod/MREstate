<?php
/*
Template Name: Front Page
*/
?>

<?php get_header() ?>

<div class="header absolute w-full top-0 pt-16 items-center flex h-screen" style="background-image: url(<?php echo get_template_directory_uri() . "/images/hero-image-one.jpg" ?>" );">
  <div class="container mx-auto items-center flex flex-wrap px-4">
    <div class="w-full text-center">
      <div class="pt-0">
        <h1 class="text-4xl md:text-5xl xl:text-6xl text-white font-bold">
          Pronađimo tvoj novi dom
        </h1>
        <p class="mt-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Rhoncus metus tempor ut eu ultricies. Tincidunt sapien, feugiat nulla ac.
        </p>
        <div class="mt-12 py-4 flex justify-center bg-red-700">
          <form>
            <!-- Start of form -->
            <div class="flex flex-wrap -mx-3 mb-2">
              <div class="w-full  md:w-1/3 px-3 mb-6 md:mb-0">
                <div class="relative">
                  <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                    <option>Sve</option>
                    <option>Kuća</option>
                    <option>Stan</option>
                    <option>Poslovni prostor</option>
                    <option>Zemljište</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
                  </div>
                </div>
              </div>
              <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Albuquerque">
              </div>
              <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 rounded">
                Button
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer() ?>