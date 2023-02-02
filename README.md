<html>
  <head>
    <style>
      body {
        background-color: red;
        color: black;
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <form>
      <label>First Name:</label>
      <input type="text" id="firstName" required>
      <br><br>
      <label>Last Name:</label>
      <input type="text" id="lastName" required>
      <br><br>
      <label>Age:</label>
      <input type="number" id="age" required>
      <br><br>
      <label>Occupation:</label>
      <input type="text" id="occupation" required>
      <br><br>
      <input type="submit" value="Submit">
    </form>

    <p id="summary"></p>

    <script>
      const form = document.querySelector("form");
      const firstNameInput = document.querySelector("#firstName");
      const lastNameInput = document.querySelector("#lastName");
      const ageInput = document.querySelector("#age");
      const occupationInput = document.querySelector("#occupation");
      const summaryParagraph = document.querySelector("#summary");

      form.addEventListener("submit", (event) => {
        event.preventDefault();
        const birthYear = 2023 - ageInput.value;
        summaryParagraph.textContent = `Summary:
          First Name: ${firstNameInput.value}
          Last Name: ${lastNameInput.value}
          Age: ${ageInput.value}
          Occupation: ${occupationInput.value}
          Birth Year (estimated): ${birthYear}`;
      });
    </script>
  </body>
</html>

