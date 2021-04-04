const openModalButtons = document.querySelectorAll('[data-modal-target]')
const closeModalButtons = document.querySelectorAll('[data-close-btn]')
const overlay = document.getElementById('overlay')
const getProductID = document.querySelectorAll('[data-indexNumber]')

openModalButtons.forEach((button) => {
  button.addEventListener('click', () => {
    const modal = document.querySelector(button.dataset.modalTarget)
    openModal(modal)
  })
})

overlay.addEventListener('click', () => {
  const modals = document.querySelectorAll('.modal.active')
  modals.forEach((modal) => {
    closeModal(modal)
  })
})

closeModalButtons.forEach((button) => {
  button.addEventListener('click', () => {
    const modal = button.closest('.modal')
    closeModal(modal)
  })
})

function openModal(modal) {
  if (modal == null) return
  modal.classList.add('active')
  overlay.classList.add('active')
}

function closeModal(modal) {
  if (modal == null) return
  modal.classList.remove('active')
  overlay.classList.remove('active')
}

//AJAX Description Handler

getProductID.forEach((button) => {
  button.addEventListener('click', () => {
    const btnID = document.querySelector(button.dataset.indexNumber)
    btnValuePost(btnID)
  })
})

function btnValuePost(btnID) {
  $.post(
    'classes/Ajax.class.php',
    {
      btnID: btnID,
    },
    (response) => {
      // response from PHP back-end
      console.log(response)
    }
  )
}
