function logout() {
  localStorage.removeItem("salonToken");
  $.toast({
    heading: "Logout Successfully",
    showHideTransition: "slide",
    icon: "success",
    bgColor: "#179756",
  });
  setTimeout(function () {
    window.location.replace("../pro/");
  }, 1000);
}
