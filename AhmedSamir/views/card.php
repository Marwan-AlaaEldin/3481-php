<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Card</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center p-6 flex-wrap">


        <div class="">
            <img
                src="<?= $product['thumbnail']; ?>"
                alt="<?= $product['title']; ?>"
                class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-500"
            >
            <span class="absolute top-4 left-4 bg-black/80 text-white text-sm px-3 py-1 rounded-full backdrop-blur">
                $<?= $product['price']; ?>
            </span>
        </div>

        <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800 group-hover:text-black transition">
                <?= $product['title']; ?>
            </h3>

            <button class="mt-6 w-full bg-black text-white py-3 rounded-xl hover:bg-gray-800 active:scale-95 transition">
                View Product
            </button>
        </div>


</body>
</html>