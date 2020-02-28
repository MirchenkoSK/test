/*
 * # Author
 * Bernhard Wilson
 * bernhard.wilson@wolframium.net
 *
 * # Project
 * Wolf-Admin
 * Administration interface
 *
 * Copyright 2019 B.Wilson
 * Released under the MIT license
 * https://wolframium.net
 *
 */

const app = document.getElementById('app')
const trigger = document.getElementById('trigger')
const bar = document.getElementById('bar')

trigger.addEventListener('click', event => {
    bar.classList.toggle('animate')
    app.classList.toggle('nav--on')
})

let navbarItems = document.querySelectorAll('#navbar-nav > .item')
navbarItems.forEach(item => {
    if (item.querySelector('.title')) {
        item.querySelector('.title').addEventListener('click', event => {
            if (document.querySelector('.sub--on') == item) {
                item.classList.remove('sub--on')
            } else {
                if (document.querySelector('.sub--on')) document.querySelector('.sub--on').classList.remove('sub--on')
                item.classList.toggle('sub--on')
            }
        })
    }
})

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

$(function () {
    $('[data-toggle="popover"]').popover()
})

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})