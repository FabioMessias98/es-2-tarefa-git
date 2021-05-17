(function () {
	const choice = document.getElementsByClassName( 'js-choice' )
	const sectionVisible = document.getElementsByClassName( 'js-section-visible' )

	for(const i of choice) {
		i.addEventListener( 'click', function() {
			
			for(const j of sectionVisible) {
				if(this.dataset.value == j.dataset.value) {
					j.classList.add( 'active' )
				}

				else {
					j.classList.remove( 'active' )
				}
			}
		})
	}
})()