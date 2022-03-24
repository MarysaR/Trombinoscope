const burger = document.querySelector('.burger'); //creation d'une constante qui appel la div de class burger
const ul = document.querySelector('ul');
// maintenant je veux qu'a chaque clic une animation se declenche sur la div. Il faut ajouter un css a la div au clic. puis au reclic la class se retire. >> toggle

burger.addEventListener('click', () => {

    burger.classList.toggle('active');
    ul.classList.toggle('active')
}) // maintenant quand on clic sur le burger la class devient 'burger active' et on peut la selectionner dans le css


/* $(document).ready(function () {
  
    $(".one").click(function (){
      $(this).addClass("actif").siblings().removeClass("actif");
    });
  });
   */

  const activePage = window.location.pathname;
const navLinks = document.querySelectorAll('nav a').forEach(link => {
  if(link.href.includes(`${activePage}`)){
    link.classList.add('actif');
   
  }
})