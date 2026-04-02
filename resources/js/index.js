
let catalog_btn = document.getElementById("catalog-main-btn");
let menu_btn = document.getElementById("menu-main-btn")
let catalog_big_btn = document.getElementById("catalog-big-btn")

function onMainBtnClick(){
	if (document.body.clientWidth < 600) {
		let aria_expanded = catalog_btn.getAttribute("aria-expanded");
		if (aria_expanded === 'true'){
			catalog_big_btn.style.display = "block"
			catalog_btn.style.display = "none"
			menu_btn.style.display = "none"
		}
		else {
			menu_btn.style.display = "block"
		}
	}
	
}
function onBigBtnClick() {
	if (document.body.clientWidth < 600) {
		catalog_btn.style.display = 'block'
		menu_btn.style.display = 'block'
		catalog_big_btn.style.display ='none'
	}
}

const ChangeOnMinus = function(el) {
	
	let plus_el = el.getElementsByTagName("div")[2];
	console.log(plus_el)
	if ( plus_el.classList.contains('plus')){
		plus_el.classList.remove('plus');
		plus_el.classList.add('minus');

	}
	else{
		plus_el.classList.add('plus');
		plus_el.classList.remove('minus');
	}
	/*console.log(plus_el.classList) */
}
