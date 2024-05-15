<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?fNamily=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-r from-cyan-500 to-emerald-500">

<section>
  
  <div class="w-full flex flex-col xl:flex-row">

    <div class="w-full xl:w-1/2">
      <div class="w-[40%] mx-auto my-5 md:my-[100px] bg-white rounded-full ">
        <img class="object-cover" src="/img/logo.png" alt="">
      </div>
      <div>
        <h1 class="text-4xl font-bold text-center font-merriweather text-white md:text-6xl md:my-[50px]">About Us</h1>
        <p class="text-slate-600 font-bold text-sm text-justify p-3 md:text-xl md:text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto a unde itaque qui ea ducimus modi nulla sunt?
           Totam nemo accusantium autem! Odit, ipsum. Unde mollitia dignissimos debitis qui illo?</p>
      </div>
    </div>

    <div class="w-full xl:w-1/2">
      <div class="w-full shadow-xl relative">
        <img class="object-cover absolute top-0 right-0" src="/img/form.png" alt="">
        <div class="absolute top-10 right-10">
          <h1 class="text-center text-2xl font-bold font-merriweather mb-5 lg:mt-[100px]">Login to Jasahub</h1>
          <form action="">
            <input type="text" name="username" placeholder="Username" class="w-[250px] sm:w-[300px] md:w-[400px] xl-[500px] h-[35px] md:h-[50px] rounded-xl border-slate-400 border-2 mb-5 sm:mb-10 shadow-slate-300 shadow-md placeholder:font-merriweather placeholder:text-lg placeholder:font-bold"><br>
            <input type="password" name="password" placeholder="Password" class="w-[250px] sm:w-[300px] md:w-[400px] xl-[500px] h-[35px] rounded-xl md:h-[50px] border-slate-400 border-2 mb-5 sm:mb-10 shadow-slate-300 shadow-md placeholder:text-lg placeholder:font-bold"><br>
          </form>
          <button type="submit" class="w-20 h-7 md:h-[50px] md:w-[100px] bg-black rounded-lg font-merriweather text-md text-center text-white">Login</button>
        </div>
      </div>
    </div>
  </div>

</section>

</body>
</html>
