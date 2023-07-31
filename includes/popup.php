<div class="popupBox">
    <div class="popupBox__content">
        <div class="close text-center">X</div>
       
        <form id="contactus" method="post" action="process_form.php">
            <h3>Contact us</h3>

            <fieldset>
                <input placeholder="Name" name="name" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Email Address"  name="email" type="email" tabindex="2" required>
            </fieldset>
            <fieldset>
                <input placeholder="Phone Number"  name="mobile" type="tel" tabindex="3" required>
            </fieldset>
            <fieldset>
                <input placeholder="Subject"  name="subject" type="tel" tabindex="4" required>
            </fieldset>
            <fieldset>
                <textarea placeholder="Type your message here..."  name="message" tabindex="5" required></textarea>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contactus-submit" data-submit="...Sending">Send Now</button>
            </fieldset>
        </form>
    </div>
</div>
<style>
    

  /* ------------------------contact popup form ------------------------------------------- */

  #contactus {
    font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
    background: #F9F9F9;
    padding: 20px;
    margin: 100px 0;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  }

  #contactus h3 {
    display: block;
    font-size: 30px;
    font-weight: 300;
    margin-bottom: 10px;
  }

  #contactus h4 {
    margin: 5px 0 15px;
    display: block;
    font-size: 13px;
    font-weight: 400;
  }

  fieldset {
    border: medium none !important;
    margin: 0 0 10px;
    min-width: 100%;
    padding: 0;
    width: 100%;
  }

  #contactus input[type="text"],
  #contactus input[type="email"],
  #contactus input[type="tel"],
  #contactus input[type="url"],
  #contactus textarea {
    width: 100%;
    border: 1px solid #ccc;
    background: #FFF;
    margin: 0 0 5px;
    padding: 10px;
  }

  #contactus input[type="text"]:hover,
  #contactus input[type="email"]:hover,
  #contactus input[type="tel"]:hover,
  #contactus input[type="url"]:hover,
  #contactus textarea:hover {
    -webkit-transition: border-color 0.3s ease-in-out;
    -moz-transition: border-color 0.3s ease-in-out;
    transition: border-color 0.3s ease-in-out;
    border: 1px solid #aaa;
  }

  #contactus textarea {
    height: 100px;
    max-width: 100%;
    resize: none;
  }

  #contactus button[type="submit"] {
    cursor: pointer;
    width: 100%;
    border: none;
    background: #f0715f;
    color: #FFF;
    margin: 0 0 5px;
    padding: 10px;
    font-size: 15px;
  }

  #contactus button[type="submit"]:hover {
    background: #f07150;
    -webkit-transition: background 0.3s ease-in-out;
    -moz-transition: background 0.3s ease-in-out;
    transition: background-color 0.3s ease-in-out;
  }

  #contactus button[type="submit"]:active {
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
  }

  #contactus input:focus,
  #contactus textarea:focus {
    outline: 0;
    border: 1px solid #aaa;
  }

  ::-webkit-input-placeholder {
    color: #888;
  }

  :-moz-placeholder {
    color: #888;
  }

  ::-moz-placeholder {
    color: #888;
  }

  :-ms-input-placeholder {
    color: #888;
  }

  /* ----------------------------Popup end------------------------------------- */
</style>

<script>
  const popup = document.querySelector(".popupBox");
  const close = document.querySelector(".close");

  window.onload = function() {
      setTimeout(() => {
          popup.style.display = "block";
      }, 6000);
  };

  close.addEventListener("click", () => {
      popup.style.display = "none";
  });
</script>
