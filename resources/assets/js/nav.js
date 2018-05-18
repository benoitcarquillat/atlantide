
console.log('je suis le js');
$('.bouton').click(toggleNav);

function toggleNav(){
    $('.menu2').toggleClass("hidden") 
    //$('.bouton').toggleClass("boutonactif")
    $('.bouton').toggleClass("boutoninactif")    
};
