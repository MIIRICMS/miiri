// Select the team link and modal elements
const teamLink = document.getElementById('team-link');
const modal = document.querySelector('.bg-modal');
const modalContent = document.querySelector('.modal-content');
const modalClose = document.querySelector('.modal-close');

// Function to open the modal and load content from team-modal.html
function openModal() {
  modal.style.display = 'flex';

  // Fetch content from team-modal.html
  fetch('team-modal.html')
    .then((response) => response.text())
    .then((data) => {
      // Insert the fetched content into the modal
      modalContent.innerHTML = data;
    })
    .catch((error) => {
      console.error('Error fetching content:', error);
    });
}

// Function to close the modal
function closeModal() {
  modal.style.display = 'none';
  // Clear the modal content when closing
  modalContent.innerHTML = '';
}

// Event listener for clicking the team-name link
teamLink.addEventListener('click', (event) => {
  event.preventDefault(); // Prevent the default link behavior
  openModal();
});

// Event listener for clicking the modal-close element
modalClose.addEventListener('click', () => {
  closeModal();
});

// Event listener to close the modal when clicking outside the modal content
window.addEventListener('click', (event) => {
  if (event.target === modal) {
    closeModal();
  }
});
