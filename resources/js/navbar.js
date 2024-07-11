let menuItems = document.querySelectorAll('.menu-item');
let menuItem2 = document.querySelector('.menu-item-2');
let columnDettagli = document.querySelector('.column-dettagli');
let isHoveringMenuItem = false;
let isHoveringMenuItem2 = false;
let lastHoveredMenuItem = null; 
let menuItem2Elements = [];

document.addEventListener('DOMContentLoaded', () => {

    function handleMouseOver(event) {
        let categoryId = event.currentTarget.dataset.categoryId;
        let specificCategories = categoriesData.filter(cat => cat.macroCategory_id == categoryId);

        if (specificCategories.length > 0) {
            let htmlContent = '';
            specificCategories.forEach(category => {
                let link = `${baseUrl}/category/${category.id}`;
                if(locale == "it") {
                    htmlContent += `<div><a href="${link}" class="menu-item-2-element">${category.name}</a></div>`;
                }else if (locale == "en"){
                    htmlContent += `<div><a href="${link}" class="menu-item-2-element">${category.en}</a></div>`;
                }else {
                    htmlContent += `<div><a href="${link}" class="menu-item-2-element">${category.ro}</a></div>`;
                }
            });
            menuItem2.innerHTML = htmlContent;

            // Aggiungi gestione degli eventi per i nuovi elementi di menu-item-2
            menuItem2Elements = document.querySelectorAll('.menu-item-2-element');
            menuItem2Elements.forEach(item => {
                item.addEventListener('mouseover', handleMouseOverMenuItem2Element);
                item.addEventListener('mouseout', handleMouseOutMenuItem2Element);
            });
        } else {
            menuItem2.innerHTML = '';
        }
    
        // Mantieni la classe hovered su menu-item
        if (lastHoveredMenuItem && lastHoveredMenuItem !== event.currentTarget) {
            lastHoveredMenuItem.classList.remove('hovered');
        }
        event.currentTarget.classList.add('hovered');
        lastHoveredMenuItem = event.currentTarget;

        isHoveringMenuItem = true;
    }

    function handleMouseOut(event) {
        // Verifica se il mouse sta uscendo dall'area dei menu
        if (!event.relatedTarget ||
            (!event.relatedTarget.classList.contains('menu-item') &&
             !event.relatedTarget.classList.contains('menu-item-2') &&
             !columnDettagli.contains(event.relatedTarget))) {

            // Rimuovi la classe hovered solo se il mouse non è su menu-item-2 o sugli elementi di menu-item-2
            if (!isHoveringMenuItem2) {
                menuItem2.innerHTML = '';
            }

            // Mantieni la classe hovered su menu-item se il mouse non è su menu-item-2
            if (!menuItem2.contains(event.relatedTarget) && !columnDettagli.contains(event.relatedTarget)) {
                isHoveringMenuItem = false;

                if (!isHoveringMenuItem2) {
                    lastHoveredMenuItem.classList.remove('hovered');
                }

                if (event.relatedTarget && event.relatedTarget.classList.contains('menu-item-2')) {
                    event.relatedTarget.classList.add('hovered');
                    isHoveringMenuItem2 = true;
                }
            }
        }
    }   

    function handleMouseOverMenuItem2(event) {
        isHoveringMenuItem2 = true;
    }

    function handleMouseOutMenuItem2(event) {
        if (!event.relatedTarget ||
            (!event.relatedTarget.classList.contains('menu-item') &&
             !columnDettagli.contains(event.relatedTarget))) {
            if (!isHoveringMenuItem) {
                menuItem2.innerHTML = '';
                menuItem2Elements.forEach(item => item.classList.remove('hovered'));
                isHoveringMenuItem2 = false;
            }
        }
    }

    function handleMouseOverMenuItem2Element(event) {
        if (lastHoveredMenuItem && lastHoveredMenuItem !== event.currentTarget) {
            lastHoveredMenuItem.classList.remove('hovered');
        }

        event.currentTarget.classList.add('hovered');
        lastHoveredMenuItem = event.currentTarget;

        isHoveringMenuItem2 = true;
    }

    function handleMouseOutMenuItem2Element(event) {
        if (!event.relatedTarget ||
            (!event.relatedTarget.classList.contains('menu-item-2-element') &&
             !columnDettagli.contains(event.relatedTarget))) {
            if (!isHoveringMenuItem) {
                menuItem2Elements.forEach(item => item.classList.remove('hovered'));
                menuItem2.innerHTML = '';
                isHoveringMenuItem2 = false;
            }
        }
    }

    menuItems.forEach(item => {
        item.addEventListener('mouseover', handleMouseOver);
        item.addEventListener('mouseout', handleMouseOut);
    });

    columnDettagli.addEventListener('mouseover', handleMouseOverMenuItem2);
    columnDettagli.addEventListener('mouseout', handleMouseOutMenuItem2);
    menuItem2.addEventListener('mouseover', handleMouseOverMenuItem2);
    menuItem2.addEventListener('mouseout', handleMouseOutMenuItem2);
});

/* navbar scroll */

let navbar = document.querySelector("#navbar");
let navbarContent = document.querySelector("#navbarSupportedContent")
let iconaAggiungiArticoloNavbar = document.querySelector(".iconaAggiungiArticoloNavbar")
let mediaQuery = window.matchMedia('(max-width: 991px)');


if (!mediaQuery.matches){
    window.addEventListener('scroll', function() {
        let scrollTop = window.scrollY;
    
        if (scrollTop > 0) {    
            navbarContent.classList.add('hiddenProva'); 
            navbar.classList.add('navbarScrollProva');
            iconaAggiungiArticoloNavbar.classList.remove('hiddenProva2');
        } else {
            navbarContent.classList.remove('hiddenProva');
            navbar.classList.remove('navbarScrollProva');
            iconaAggiungiArticoloNavbar.classList.add('hiddenProva2');
        }
    })
}


