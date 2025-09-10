# PHP Form Validation Example

This project demonstrates **form validation in PHP**.  
The form collects user information like **name, email, website, comment, and gender**, validates it on the server side, and displays the user input back on the page.

---

## 🚀 Features
- Input sanitization using `test_input()` function (trims, removes slashes, and escapes HTML special characters).
- Validation rules:
  - **Name** → Only letters and white spaces allowed.
  - **Email** → Must be a valid email format.
  - **Website** → Must be a valid URL (optional field).
  - **Gender** → Required field (Male/Female).
  - **Comment** → Optional free text.
- Error messages are shown next to each field when invalid.
- Displays sanitized user input after successful submission.

---

## 📂 Project Structure

---

## 🛠️ How to Run
1. Install [XAMPP](https://www.apachefriends.org/index.html) or any local PHP server.
2. Place the project folder inside the `htdocs` directory of XAMPP.
3. Start **Apache** in the XAMPP Control Panel.
4. Open your browser and visit:
