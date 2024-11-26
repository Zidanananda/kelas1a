// Data pengguna simulasi
const users = [
  { username: "admin", password: "password" },
  { username: "user", password: "12345" },
];

// Login form handling
document.addEventListener("DOMContentLoaded", () => {
  const loginForm = document.getElementById("loginForm");
  const errorMessage = document.getElementById("error-message");

  if (loginForm) {
    loginForm.addEventListener("submit", function (e) {
      e.preventDefault();

      const username = document.getElementById("username").value;
      const password = document.getElementById("password").value;

      // Cek apakah username dan password sesuai
      const user = users.find(
        (u) => u.username === username && u.password === password
      );

      if (user) {
        // Simpan status login di sessionStorage
        sessionStorage.setItem("loggedIn", "true");
        sessionStorage.setItem("username", username);

        // Redirect ke dashboard
        window.location.href = "dashboard.html";
      } else {
        errorMessage.textContent = "Username atau password salah.";
      }
    });
  }

  // Cek status login di dashboard
  if (window.location.pathname.includes("dashboard.html")) {
    const isLoggedIn = sessionStorage.getItem("loggedIn");
    if (!isLoggedIn) {
      window.location.href = "index.html";
    }
  }
});

// Logout function
function logout() {
  sessionStorage.removeItem("loggedIn");
  sessionStorage.removeItem("username");
  window.location.href = "index.html";
}
