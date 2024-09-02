document.addEventListener('DOMContentLoaded', function() {
  const dropdownLinks = document.querySelectorAll('#branchDropdown a');
  const rows = document.querySelectorAll('table tbody tr');

  dropdownLinks.forEach(link => {
    link.addEventListener('click', function(event) {
      event.preventDefault();
      
      const selectedBranch = this.getAttribute('data-branch');

      rows.forEach(row => {
        const branchCell = row.cells[1].textContent.trim(); // Assuming branch is in the 3rd column (index 2)

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


// Initialize default tab
showTable('online-application-table', 'onlineTab');

function showTable(tableId, tabId) {
  // Hide all tables
  document.querySelectorAll('[id$="-table"]').forEach(table => table.classList.add('hidden'));

  // Remove active class from all tabs
  document.querySelectorAll('[id$="Tab"]').forEach(tab => tab.classList.remove('bg-yellow-400', 'text-gray-800', 'font-semibold'));

  // Show the selected table
  document.getElementById(tableId).classList.remove('hidden');

  // Add active class to the selected tab
  const activeTab = document.getElementById(tabId);
  activeTab.classList.add('bg-yellow-400', 'text-gray-800', 'font-semibold');
}

// Initialize default tab
showTable('online-application-table', 'onlineTab');
