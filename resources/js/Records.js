document.addEventListener('DOMContentLoaded', function() {
  const dropdownLinks = document.querySelectorAll('#branchDropdown a');
  const rows = document.querySelectorAll('table tbody tr');

  dropdownLinks.forEach(link => {
    link.addEventListener('click', function(event) {
      event.preventDefault();
      
      const selectedBranch = this.getAttribute('data-branch');

      rows.forEach(row => {
        const branchCell = row.cells[2].textContent.trim(); // Assuming branch is in the 3rd column (index 2)

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

document.addEventListener('DOMContentLoaded', function() {
  const sortAZ = document.querySelector('#sortAZ');
  const sortZA = document.querySelector('#sortZA');
  
  sortAZ.addEventListener('click', function() {
    sortTable(1, true);
  });

  sortZA.addEventListener('click', function() {
    sortTable(1, false);
  });

  function sortTable(columnIndex, ascending) {
    const table = document.querySelector('table tbody');
    const rows = Array.from(table.querySelectorAll('tr'));

    rows.sort((a, b) => {
      const aText = a.children[columnIndex].textContent.trim();
      const bText = b.children[columnIndex].textContent.trim();
      
      if (ascending) {
        return aText.localeCompare(bText);
      } else {
        return bText.localeCompare(aText);
      }
    });

    rows.forEach(row => table.appendChild(row));
  }
});