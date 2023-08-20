@extends("layouts.app")

@section('content')

    <!-- HERO -->
        <div class='hero-bg-image flex flex-col items-center justify-center text-center '>
            <h1 class="text-gray-100 text-5xl uppercase font-bold pb-10">Welcom to my Blog</h1>
            <a href="/" class="bg-gray-100 text-xl text-gray-700 py-4 px-5 rounded-lg uppercase font-bold ">Start Reading</a>
        </div>

    <!-- How to be an expert -->
        <div class="container sm:grid grid-cols-2 gap-15 mx-auto  py-15">

            <div class="mx-2 md:mx-0">
                <img class="sm:rounded-lg " src="https://picsum.photos/id/239/960/620" alt="">
            </div>

            <div class="flex flex-col items-left justify-center m-10 sm:m-0">
                <h2 class="font-bold text-gray-700 text-4xl uppercase">
                    How to be an expert 2023
                </h2>

                <p class="font-bold text-gray-600 text-xl pt-2">
                    You can find a list of all programing languages here.
                </p>

                <p class="py-4 text-gray-500 text-sm leading-6">
                    Get the same random image every time based on a seed, by Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi obcaecati totam ab magni, eos tempore
                </p>

                <a href="/" class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">
                    Read More
                </a>
            </div>



        </div>

    <!-- Blog Categories -->
        <div class="text-center p-15 bg-gray-700 text-gray-100">
            <h2 class="text-2xl">
                Blog Categories
            </h2>
            <div class="container mx-auto pt-10  sm:grid grid-cols-4">
                <div class="font-bold text-3xl py-2"> UX Design Thinking</div>
                <div class="font-bold text-3xl py-2"> programing languages</div>
                <div class="font-bold text-3xl py-2"> Graphic Design Development</div>
                <div class="font-bold text-3xl py-2"> Front-End</div>
            </div>
        </div>



        <!-- Recent Posts -->

    <div class="container mx-auto text-center py-15">
        <h2 class="font-blod text-5xl py-10">Recent Posts</h2>
        <p class="text-gray-400 leading-6 px-10">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam, earum laboriosam provident consequatur, minus harum doloribus labore quam quaerat dolor nobis a excepturi delectus distinctio doloremque totam atque itaque voluptas ut tempora. Aliquid, facilis! Necessitatibus recusandae rerum, fugiat quisquam praesentium provident velit repudiandae omnis, odio, laborum atque. Architecto, nostrum accusamus.</p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 mx-auto ">

        <div class="flex bg-yellow-700 text-gray-100 pt-10">

            <div class="block m-auto pt-4 pb-15 w-4/5">

                <ul class="md:flex text-xs gap-2 ">
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md-my-0 hover:bg-yellow-500 hover:text-yellow-100 transaition duration-300"><a href="/">PHP</a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md-my-0 hover:bg-yellow-500 hover:text-yellow-100 transaition duration-300"><a href="/">Programing</a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md-my-0 hover:bg-yellow-500 hover:text-yellow-100 transaition duration-300"><a href="/">Languages</a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md-my-0 hover:bg-yellow-500 hover:text-yellow-100 transaition duration-300"><a href="/">Backend</a></li>

                </ul>


                <h3 class="text-l py-10 leading-6">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, porro? Officiis rem harum, itaque fugiat, dignissimos enim officia, ea ratione non pariatur veniam vitae ipsum id debitis aperiam cupiditate aliquid natus libero! Laboriosam hic rerum est, corrupti dicta blanditiis totam autem molestiae, officia earum facilis dignissimos in tempora accusamus ex.
                </h3>


                <a href="/" class="bg-transparent border-2 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block">Read More</a>
            </div>

        </div>


        <div class="flex ">
            <img class="object-caver"  src="https://picsum.photos/id/242/960/620" alt="">
        </div>


    </div>

@endsection

