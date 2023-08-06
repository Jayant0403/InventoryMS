var sideBarIsOpen = true;
toggle.addEventListener( 'click', (event) => {
event.preventDefault();

if(sideBarIsOpen) {
dashboard_sidebar.style.width = '10%';
dashboard_sidebar.style.transition = '0.3s all';
dasboard_content_container.style.Width = '90%' ;
dashboard_logo.style.fontSize = '60px';
userImage.style.width = '60px';
menuIcons = document.getElementsByClassName('menuText');
for(var i=0; i < menuIcons.length; i++) {
menuIcons[i].style.display = 'none';
}
document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'center';
sideBarIsOpen = false;
} else {
dashboard_sidebar.style.width = '20%';
dasboard_content_container.style.width = '80%';
dashboard_logo.style.fontSize = '80px';
userImage.style.width = '80px';
menuIcons = document.getElementsByClassName('menuText');
for(var i=0; i < menuIcons.length; i++){
menuIcons[i].style.display = 'inline-block';
}
document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'left';
sideBarIsOpen = true;
}
});

document.addEventListener('click',function(e){
    let clickedE1 = e.target;

    if(clickedE1.classList.contains('showHideSubmenu')){
        let submenu = clickedE1.closest('ul').querySelector('.subMenus');
        let mainMenuIcon = clickedE1.closest('ul').querySelector('.MainMenuangle');

        // Close all submenus 
        


        let subMenus=document.querySelectorAll('.subMenus');
        subMenus.forEach((sub) => {
        sub.style.display='none';

        });



        console.log(mainMenuIcon);
        if(submenu != null) {
            
            if(submenu.style.display==='block') { 
                submenu.style.display = 'none';
                mainMenuIcon.classList.remove('fa-angle-down');
                mainMenuIcon.classList.add('fa-angle-left');

                fa-angle-left
            }  else {
                submenu.style.display = 'block';
                mainMenuIcon.classList.remove('fa-angle-left');
                mainMenuIcon.classList.add('fa-angle-down');
            }
         }
             
    }
});
