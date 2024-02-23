<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Task Manager</title>
        <link
            href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
            rel="stylesheet"
        />
    </head>
    <body class="flex items-center justify-center">
        <section class="flex items-center justify-center h-screen w-4/5">
            <div class="flex-1 flex justify-end">
                <img
                    class="self-end"
                    src="/images/Intersect.png"
                    alt="Login cover"
                />
            </div>
            <div class="flex-1 flex items-center justify-center">
                <div class="w-4/5">
                    <div class="flex items-center justify-between pb-7">
                        <div>
                            <h1 class="text-4xl">
                                {{ mb_strtoupper("welcome back!") }}
                            </h1>
                            <span class="text-base text-gray-600"
                                >Please, enter your details</span
                            >
                        </div>
                        <div>
                            <img src="/images/Group.png" alt="Smile icon" />
                        </div>
                    </div>
                    <form method="POST" action="#">
                        <div class="flex gap-4 flex-col py-4">
                            <div>
                                <input
                                    class="w-full h-16 bg-gray-100 rounded-3xl"
                                    type="email"
                                    placeholder="E-mail"
                                />
                            </div>
                            <div>
                                <input
                                    class="w-full h-16 bg-gray-100 rounded-3xl"
                                    type="password"
                                />
                            </div>
                        </div>
                        <button
                            class="w-full h-16 rounded-3xl bg-blue-500 text-white text-base"
                            type="submit"
                        >
                            LOG IN
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>
