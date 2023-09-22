<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Me liravndo da Maldição</title>
</head>

<body>
    <section class="text-center items-center justify-center gap-2 mx-20">
        <div class="text-center items-center m-8 ">
            <h1 class="text-3xl font-bold ">
                <?php
                echo "Olá, Mundo! \u{1F30E}";
                ?>
            </h1>
            <p>Vamos tentar nos livrar da maldição</p>
        </div>
        <div>
            <form class="flex flex-wrap items-center my-10 justify-center gap-2">
                <input class="border border-indigo-200 p-1 rounded" type="search" id="pesquisa" name="pesquisa" placeholder="Digite o exercicio aqui">
                <button class="border bg-sky-600 text-white p-1 rounded" type="submit">Pesquisar</button>
            </form>
            <div class="flex flex-col gap-2">
                <div class="flex flex-col text-left justify-start bg-blue-300  p-3 rounded">
                    <h2 class="text-xl">Ex00</h2>
                    <p class="text-sm text-slate-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, ab facere, itaque ipsam hic maiores laudantium nihil at dolore optio id! Tempora et voluptatibus ipsam tempore natus consequatur vitae! Enim!</p>
                </div>
               
            </div>
    </section>

</body>

</html>