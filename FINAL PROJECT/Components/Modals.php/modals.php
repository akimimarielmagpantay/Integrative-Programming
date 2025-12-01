<!-- ADD GOAL MODAL -->
<div id="goal-modal"
     class="modal fixed inset-0 bg-black bg-opacity-60 hidden items-center justify-center z-50">
  <div class="bg-white p-6 rounded-lg w-96 relative">

    <!-- Close button (X) -->
    <button onclick="closeModal()"
            class="absolute top-2 right-2 text-gray-600 text-xl hover:text-black">
      &times;
    </button>

    <h2 class="text-xl font-bold mb-4" id="modal-title">Add Goal</h2>

    <form onsubmit="saveGoal(event)">
      <input id="goal-title" class="w-full p-2 border rounded mb-3"
             placeholder="Goal Title" required>

      <input id="target-amount" class="w-full p-2 border rounded mb-3"
             type="number" min="1" placeholder="Target Amount" required>

      <input id="target-date" class="w-full p-2 border rounded mb-3"
             type="date" required>

      <select id="goal-category" class="w-full p-2 border rounded mb-3" required>
        <option value="">Select Category</option>
        <option value="school">School</option>
        <option value="gadgets">Gadgets</option>
        <option value="travel">Travel</option>
        <option value="emergency">Emergency</option>
        <option value="business">Business</option>
        <option value="other">Other</option>
      </select>

      <input type="hidden" id="editing-goal-id">

      <div class="flex gap-2 mt-4">
        <button type="button" onclick="closeModal()"
                class="bg-gray-300 px-4 py-2 rounded w-1/2">
          Cancel
        </button>

        <button type="submit"
                class="bg-teal-700 text-white px-4 py-2 rounded w-1/2">
          Save
        </button>
      </div>
    </form>

  </div>
</div>



<!-- ADD MONEY MODAL -->
<div id="money-modal"
     class="modal fixed inset-0 bg-black bg-opacity-60 hidden items-center justify-center z-50">
  <div class="bg-white p-6 rounded-lg w-96 relative">

    <button onclick="closeModal()"
            class="absolute top-2 right-2 text-gray-600 text-xl hover:text-black">
      &times;
    </button>

    <h2 class="text-xl font-bold mb-4">Add Money</h2>

    <form onsubmit="addMoney(event)">
      <input id="deposit-amount"
             class="w-full p-2 border rounded mb-3"
             type="number" min="1" placeholder="Amount" required>

      <input id="money-goal-id" type="hidden">

      <div class="flex gap-2 mt-4">
        <button type="button" onclick="closeModal()"
                class="bg-gray-300 px-4 py-2 rounded w-1/2">Cancel</button>

        <button type="submit"
                class="bg-green-700 text-white px-4 py-2 rounded w-1/2">
          Add
        </button>
      </div>
    </form>
  </div>
</div>



<!-- DELETE CONFIRM MODAL -->
<div id="deleteModal"
     class="modal fixed inset-0 bg-black bg-opacity-60 hidden items-center justify-center z-50">
  <div class="bg-white p-6 rounded-xl w-80 shadow-xl text-center relative">

    <button onclick="closeDeleteModal()"
            class="absolute top-2 right-2 text-gray-600 text-xl hover:text-black">
      &times;
    </button>

    <h2 class="text-lg font-bold mb-4">Delete Goal?</h2>
    <p class="text-gray-600 mb-5">This action cannot be undone.</p>

    <input type="hidden" id="delete-goal-id">

    <div class="flex gap-3">
      <button onclick="closeDeleteModal()"
              class="w-1/2 bg-gray-300 py-2 rounded hover:bg-gray-400">
        Cancel
      </button>

      <button onclick="confirmDeleteGoal()"
              class="w-1/2 bg-red-600 text-white py-2 rounded hover:bg-red-700">
        Delete
      </button>
    </div>

  </div>
</div>
