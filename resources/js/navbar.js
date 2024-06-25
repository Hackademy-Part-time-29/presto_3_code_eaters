let menuItems = document.querySelectorAll('.menu-item');
let menuItem2 = document.querySelector('.menu-item-2');
let columnDettagli = document.querySelector('.column-dettagli');
let isHoveringMenuItem = false; // Variabile per tracciare lo stato di hover su .menu-item
let isHoveringMenuItem2 = false; // Variabile per tracciare lo stato di hover su .menu-item-2
let lastHoveredMenuItem = null; // Variabile per tracciare l'ultimo menu-item con hover
let menuItem2Elements = []; // Array per tracciare gli elementi interni di menu-item-2

document.addEventListener('DOMContentLoaded', () => {

    function handleMouseOver(event) {
        let categoryId = event.currentTarget.dataset.categoryId;
        let specificCategories = categoriesData.filter(cat => cat.macroCategory_id == categoryId);
        if (specificCategories.length > 0) {
            let htmlContent = '';
            specificCategories.forEach(category => {
                htmlContent += `<div><a class="menu-item-2-element">${category.name}</a></div>`;
            });
            menuItem2.innerHTML = htmlContent;
            // Aggiorna la lista di elementi interni di menu-item-2
            menuItem2Elements = document.querySelectorAll('.menu-item-2-element');
            // Aggiungi gli event listener per gli elementi interni di menu-item-2
            menuItem2Elements.forEach(item => {
                item.addEventListener('mouseover', handleMouseOverMenuItem2Element);
                item.addEventListener('mouseout', handleMouseOutMenuItem2Element);
            });
        } else {
            menuItem2.innerHTML = '';
        }

        // Rimuovi la classe 'hovered' dal precedente menu-item
        if (lastHoveredMenuItem && lastHoveredMenuItem !== event.currentTarget) {
            lastHoveredMenuItem.classList.remove('hovered');
        }

        // Aggiungi la classe 'hovered' al menu-item corrente
        event.currentTarget.classList.add('hovered');
        lastHoveredMenuItem = event.currentTarget;

        isHoveringMenuItem = true; // Indica che il mouse è sopra un .menu-item
    }

    function handleMouseOut(event) {
        if (!event.relatedTarget ||
            (!event.relatedTarget.classList.contains('menu-item') &&
             !columnDettagli.contains(event.relatedTarget) &&
             !menuItem2.contains(event.relatedTarget))) {
            if (!isHoveringMenuItem2) { // Verifica se il mouse non è su menu-item-2
                menuItem2.innerHTML = '';
            }
            if (!menuItem2.contains(event.relatedTarget) && !columnDettagli.contains(event.relatedTarget)) {
                event.currentTarget.classList.remove('hovered'); // Rimuovi la classe 'hovered' al menu-item corrente
                isHoveringMenuItem = false;
            }
        }
    }

    function handleMouseOverMenuItem2() {
        isHoveringMenuItem2 = true; // Il mouse è sopra un .menu-item-2
    }

    function handleMouseOutMenuItem2(event) {
        if (!event.relatedTarget ||
            (!event.relatedTarget.classList.contains('menu-item') &&
             !columnDettagli.contains(event.relatedTarget))) {
            if (!isHoveringMenuItem) { // Verifica se il mouse non è su menu-item
                menuItem2.innerHTML = '';
                menuItems.forEach(item => item.classList.remove('hovered')); // Rimuovi la classe 'hovered' da tutti i menu-item
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