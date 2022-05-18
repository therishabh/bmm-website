function logout() {
  localStorage.removeItem("salonToken");
  localStorage.removeItem("salonName");
  localStorage.removeItem("bmmSalonCategory");
  $.toast({
    heading: "Logout Successfully",
    showHideTransition: "slide",
    icon: "success",
    bgColor: "#179756",
  });
  setTimeout(function () {
    window.location.replace("../pro/index");
  }, 1000);
}
