<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Form</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <section>
    <div class="container">
        <h1>Confirm Your Payment</h1>
        <div class="first-row">
            <div class="owner">
                <h3>Owner</h3>
                <div class="input-field">
                    <input type="text" require>
                </div>
            </div>
            <div class="cvv">
                <h3>CVV</h3>
                <div class="input-field">
                    <input type="password" require>
                </div>
            </div>
        </div>
        <div class="second-row">
            <div class="card-number">
                <h3>Card Number</h3>
                <div class="input-field">
                    <input type="text" require>
                </div>
            </div>
        </div>
        <div class="third-row">
            <h3>Card Number</h3>
            <div class="selection">
                <div class="date">
                    <select name="months" id="months">
                        <option value="Jan">Jan</option>
                        <option value="Feb">Feb</option>
                        <option value="Mar">Mar</option>
                        <option value="Apr">Apr</option>
                        <option value="May">May</option>
                        <option value="Jun">Jun</option>
                        <option value="Jul">Jul</option>
                        <option value="Aug">Aug</option>
                        <option value="Sep">Sep</option>
                        <option value="Oct">Oct</option>
                        <option value="Nov">Nov</option>
                        <option value="Dec">Dec</option>
                      </select>
                      <select name="years" id="years">
                      <option value="2020">2030</option>
                      <option value="2020">2029</option>
                      <option value="2020">2028</option>
                      <option value="2020">2027</option>
                      <option value="2020">2026</option>
                      <option value="2020">2025</option>
                      <option value="2020">2024</option>
                      <option value="2020">2023</option>
                      <option value="2020">2022</option>
                      <option value="2020">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                      </select>
                </div>
                <div class="cards">
                    <img src="mc.png" alt="">
                    <img src="vi.png" alt="">
                    <img src="pp.png" alt="">
                </div>
            </div>    
        </div>
        <!--a href="done_payment.html"-->
        <button class="show-modal">Confirm</button>
        <span class="overlay"></span>
        
    </div>
    <div class="modal-box">
        <i class="fa-regular fa-circle-check"></i>
        <h2>Completed</h2>
        <h3>Your Payment was Successful</h3>

        <div class="buttons">
          <button class="close-btn">Ok, Close</button>
        </div>
      </div>
    </section>

    <script>
      const section = document.querySelector("section"),
        overlay = document.querySelector(".overlay"),
        showBtn = document.querySelector(".show-modal"),
        closeBtn = document.querySelector(".close-btn");

      showBtn.addEventListener("click", () => section.classList.add("active"));

      overlay.addEventListener("click", () =>
        section.classList.remove("active")
      );

      closeBtn.addEventListener("click", () =>
        section.classList.remove("active")
      );
    </script>
</body>
</html>