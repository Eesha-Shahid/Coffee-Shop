const user = () => {
  console.log("SASA");
  const isUser = localStorage.getItem("isUser");
  const name = localStorage.getItem("name");
  const user = document.getElementById("user");
  if (isUser) {
    document.getElementById("cart").style.display = "block"
    user.innerHTML = `<i class='fa-solid fa-user'></i> ${name}`;
    user.removeAttribute("href");
    user.style.cursor = "pointer";
    user.className = "nav-link dropdown-toggle";
    user.setAttribute("id", "userDropdown");
    user.setAttribute("aria-expanded", "false");

    user.after(document.createElement("div"));
    user.nextElementSibling.className =
      "dropdown-menu dropdown-menu-right shadow animated--grow-in";
    user.nextElementSibling.setAttribute("aria-labelledby", "userDropdown");
    user.nextElementSibling.style.backgroundColor = "#211b16";
    user.nextElementSibling.innerHTML = `<a class='primary-color dropdown-item' href='#'> 
        <i class='fas fa-user fa-sm fa-fw mr-2 text-gray-400'></i>
            Profile 
        </a> 
        <a class='dropdown-item primary-color' style='cursor : pointer ' onclick='logout()' data-toggle='modal' data-target='#logoutModal'>
        <i class='fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400'></i> 
            Logout 
        </a>`;
  }
};
addEventListener("load", user);



let isActive = false
window.onclick = (event) => {
  const dropdown = document.getElementById("userDropdown");
  if (event.target === dropdown && !isActive ) {
    dropdown.nextElementSibling.style.display = "block";
    isActive = true
  } 
  else if(event.target !== dropdown.nextElementSibling) {
    dropdown.nextElementSibling.style.display = "none";
    isActive = false
  }
  else if(isActive){
    dropdown.nextElementSibling.style.display = "block"
    isActive = false
  }
};

const logout = () =>{
    localStorage.removeItem("isUser")
    localStorage.removeItem("name")
    location.replace("login.html")
}