<div>
    <div class="flex flex-col items-center w-full p-2 m-2 bg-white rounded shadow-lg sm:flex-row">
    <!-- INICIO CAJA POST -->
    @foreach ($elements as $element)
        <div class="container flex flex-col w-fit">
            <div class="flex flex-col flex-wrap -mx-4 w-fit">
            <div class="px-4 w-fit md:w-1/2 xl:w-1/3">
                <div
                    class="mb-10 overflow-hidden duration-300 bg-white rounded-lg dark:bg-dark-2 shadow-1 hover:shadow-3 dark:shadow-card dark:hover:shadow-3"
                    >
                    <img
                        src="https://cdn.tailgrids.com/2.0/image/application/images/cards/card-01/image-01.jpg"
                        alt="image"
                        class="w-full"
                        />
                    <div class="p-8 text-center sm:p-9 md:p-7 xl:p-9">
                        <h3>
                        <a
                            href="javascript:void(0)"
                            class="text-dark  hover:text-primary mb-4 block text-xl font-semibold sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]"
                            >
                        50+ Best creative website themes & templates
                        </a>
                        </h3>
                        <p
                        class="text-base leading-relaxed text-body-color dark:text-dark-6 mb-7"
                        >
                        Lorem ipsum dolor sit amet pretium consectetur adipiscing
                        elit. Lorem consectetur adipiscing elit.
                        </p>
                        <a
                        href="javascript:void(0)"
                        class="inline-block py-2 text-base font-medium transition border rounded-full text-body-color hover:border-primary hover:bg-primary border-gray-3 px-7 hover:text-white dark:border-dark-3 dark:text-dark-6"
                        >
                        View Details
                        </a>
                </div>
            </div>
        </div>
           <!--FINAL CAJA POST-->
        @endforeach
    </div>
</div>
