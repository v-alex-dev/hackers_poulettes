<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/output.css">
    <title>Hackers Poulette</title>
</head>
<body class="bg-grey">
<header>
    <nav class="flex flex-row justify-between bg-dark opacity-80">
        <div class="w-20"><img src="./assets/hackers-poulette-logo.png" alt="Hackers Poulette Logo" class=""></div>
        <div class="flex align-middle ">
            <ul class="flex content-center">
                <li class="p-1 m-2.5 flex items-center"><a href="./index.php" class="w-full text-center">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>
<main>
    <img src="./assets/hackers-poulette-logo.png" alt="Hackers Poulette Logo" class="absolute w-full -inset-y-60 -z-10">
    <section class="self-center mx-auto mt-20 z-10" >
        <form action="valid_form.php" method="post" class="w-1/3 rounded-lg shadow-2xl flex flex-col mx-auto bg-green p-5 text-white">
            <h2 class="uppercase font-bold self-center mb-3">contact</h2>
            <div class="flex flex-col">
                <div class="inputText">
                    <label  for="firstname">First Name</label>
                    <input class="rounded-xl p-1 ml-2 text-dark" type="text" name="firstname" id="firstname" placeholder="First Name" required>
                </div>
                <div class="inputText">
                    <label for="lastname">Last Name</label>
                    <input class="rounded-xl p-1 ml-2 text-dark" type="text" name="lastname" id="lastname" placeholder="Last Name" required>
                </div>
                <div class="flex ml-2 my-2 mt-4">
                    <label class="mx-2" for="gender">Gender</label>
                    <select class="rounded-xl p-1 text-dark" name="gender" id="gender" required>
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                        <option value="X">X</option>
                    </select>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="inputText">
                    <label for="email">Email</label>
                    <input class="rounded-xl p-1 ml-2" type="email" name="email" id="email" placeholder="example: myEmail@gmail.com" required>
                </div>
                <div class="inputText">
                    <label for="country">Country</label>
                    <input class="rounded-xl p-1 ml-2 text-dark" type="text" name="country" id="country" placeholder="Country" required>
                </div>
                <div class="my-4 border-t-2 border-s-1 pt-4">
                    <label class="ml-2" for="subject">Subject</label>
                    <select class="ml-2 rounded-xl p-1 text-dark" name="subject" id="subject" required>
                        <option value="Other">Other</option>
                        <option value="Technical">Technical</option>
                        <option value="Questions">Questions</option>
                        <option value="Jobs">Jobs</option>
                    </select>
                </div>
            </div>
            <div class="flex flex-col ">

                <label for="description">Message :</label>
                <textarea class="m-4 rounded-lg p-1" name="description" id="description" cols="30" rows="10" required></textarea>
                <!-- Honey pot. Secu anti-spam. -->
                <input type="text" name="honeypot" id="honeypot" style="display: none;">
            </div>
            <button type="submit">contact us</button>
        </form>
    </section>
</main>
</body>
</html>