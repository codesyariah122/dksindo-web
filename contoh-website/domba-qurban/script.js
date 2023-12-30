'use strict'

var next = document.getElementById('next')
var prev = document.getElementById('prev')

next.addEventListener('click', function(event) {
	nextSlide(true)
})
prev.addEventListener('click', function(event) {
	nextSlide(false)
})

document.onkeydown = function(event) {
	if (event.keyCode === 39 || event.which === 39) {
		nextSlide(true)
	} else if (event.keyCode === 37 || event.which === 37) {
		nextSlide(false)
	}
}

var pagecurrent = document.getElementById('pagecurrent')
var pagetotal = document.getElementById('pagetotal')
pagetotal.textContent = '∕ ' + document.querySelectorAll('main article').length


function indexOf(el) {
	var k = 0
	while (el = el.previousElementSibling) {
		++k
	}
	return k + 1
}

function nextSlide(next) {
	var active = document.querySelector('.active')
	var sibling

	if (next) {
		sibling = active.nextElementSibling
	} else {
		sibling = active.previousElementSibling
	}

	if (next && sibling === null) {
		sibling = document.querySelector('main article:first-child')
	} else if (!next && sibling === null) {
		sibling = document.querySelector('main article:last-child')
	}

	sibling.style.zIndex = 2
	active.classList.toggle('slideOut')
	pagecurrent.style.animationName = 'pageOut'

	setTimeout(function() {
		sibling.classList.add('active')
		sibling.style.zIndex = ''

		active.classList.toggle('slideOut')
		active.classList.remove('active')

		pagecurrent.textContent = indexOf(sibling)
		pagecurrent.style.animationName = 'pageIn'
	}, 1000)
}

var articles = document.querySelectorAll('article')

function articleHeight() {
	for (var article of articles) {
		article.style.height = getDocHeight() + 'px'
	}
}

function getDocHeight() {
    var D = document
    return Math.max(
        Math.max(D.body.scrollHeight, D.documentElement.scrollHeight),
        Math.max(D.body.offsetHeight, D.documentElement.offsetHeight),
        Math.max(D.body.clientHeight, D.documentElement.clientHeight)
    )
}

if (window.innerWidth < window.innerHeight) {
	articleHeight()
}

window.onresize = function(event) {
	if (window.innerWidth < window.innerHeight) {
		articleHeight()
	} else {
		for (var article of articles) {
			article.style.height = ''
		}
	}
}