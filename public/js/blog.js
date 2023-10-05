function showCreateBlog() {
    var showDialog=document.getElementById('createBlog')
    var container=document.getElementById('container')
    console.log(showDialog)
      if (showDialog.style.display === "flex") {
        showDialog.style.display = "none";
        container.style.overflow="scroll"
      }
      else{
        showDialog.style.display = "flex";
        container.style.overflow="hidden"
      }
  }
