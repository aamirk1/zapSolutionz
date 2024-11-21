// function openTab(evt, cityName) {
//     // Declare all variables
//     var i, tabcontent, tablinks;

//   tabcontent = document.getElementsByClassName("tabcontent");
//   for (i = 0; i < tabcontent.length; i++) {
//     tabcontent[i].style.display = "none";
//   }
//   tablinks = document.getElementsByClassName("tablinks");
//   for (i = 0; i < tablinks.length; i++) {
//     tablinks[i].className = tablinks[i].className.replace(" active", "");
//   }
//   document.getElementById(cityName).style.display = "block";
//   evt.currentTarget.className += " active";
// }


function openTab(evt, cityName, tabGroup) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all tab content elements for the specified tab group
  tabcontent = document.getElementsByClassName("tabcontent-" + tabGroup);
  for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
  }

  // Get all tab links for the specified tab group
  tablinks = document.getElementsByClassName("tablinks-" + tabGroup);
  for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Display the selected tab content
  document.getElementById(cityName).style.display = "block";

  // Add the "active" class to the clicked tab link
  evt.currentTarget.className += " active";
}
window.onload = function() {
  document.getElementsByClassName("tablinks-1")[0].click(); // Simulate a click on the first tab
  document.getElementsByClassName("tablinks-2")[0].click(); // Simulate a click on the first tab
}