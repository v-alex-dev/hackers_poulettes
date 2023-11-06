<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/output.css">
    <title>Hackers Poulette</title>
</head>
<body>
<header>
    <nav class="flex flex-row justify-between">
        <div class="w-2"><img src="./assets/hackers-poulette-logo.png" alt="Hackers Poulette Logo" class="w-full"></div>
        <div>
            <ul>
                <li class="p-1 m-2.5"><a href="" class="w-full">Contact</a></li>
                <li class="p-1 m-2.5"><a href="" class="w-full">Response</a></li>
            </ul>
        </div>
    </nav>
</header>
<main>
    <section>
        <form action="valid_form.php" method="post" class="w-1/3 rounded-lg shadow-2xl">
            <div>
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" id="firstname" placeholder="First Name" required>

                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" id="lastname" placeholder="Last Name" required>

                <label for="gender">Gender</label>
                <select name="gender" id="gender" required>
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                    <option value="X">X</option>
                </select>

                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="example: myEmail@gmail.com" required>

                <label for="country">Country</label>
                <input type="text" name="country" id="country" placeholder="Country" required>

                <label for="subject">Subject</label>
                <select name="subject" id="subject" required>
                    <option value="Other">Other</option>
                    <option value="Technical">Technical</option>
                    <option value="Questions">Questions</option>
                    <option value="Jobs">Jobs</option>
                </select>

                <label for="description">Message</label>
                <textarea name="description" id="description" cols="30" rows="10" required></textarea>
                <!-- Honey pot. Secu anti-spam. -->
                <input type="text" name="honeypot" id="honeypot" style="display: none;">
            </div>
            <button type="submit">Submit</button>
        </form>
    </section>
</main>
</body>
</html>