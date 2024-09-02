

document.addEventListener('DOMContentLoaded', function() {
  const dropdownLinks = document.querySelectorAll('#branchDropdown a');
  const rows = document.querySelectorAll('table tbody tr');

  dropdownLinks.forEach(link => {
    link.addEventListener('click', function(event) {
      event.preventDefault();
      
      const selectedBranch = this.getAttribute('data-branch');

      rows.forEach(row => {
        const branchCell = row.cells[4].textContent.trim(); // Assuming branch is in the 3rd column (index 2)

        if (selectedBranch === "" || branchCell === selectedBranch) {
          row.style.display = "";
        } else {
          row.style.display = "none";
        }
      });

      // Optionally close the dropdown after selection
      document.querySelector('#sortToggle1').checked = false;
    });
  });
});



