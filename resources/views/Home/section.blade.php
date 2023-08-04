<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Room Listing</title>
  <style>
    /* CSS styles go here */
    .room-container {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
      width: 1950px;
      height: 600px;
      margin-left: auto;
      margin-right: auto;
      justify-content: center;
      align-items: center;
    }

    .room-card {
      position: relative;
      display: flex;
      flex-direction: column;
      align-items: center;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      cursor: pointer; /* Add cursor pointer to indicate it's clickable */
    }

    .room-card img {
      max-width: 150px;
      max-height: 150px;
      border-radius: 5px;
      margin-bottom: 10px;
    }

    .room-info {
      text-align: center;
    }

    .room-number {
      font-size: 18px;
      font-weight: bold;
      color: #333;
    }

    .room-floor {
      font-size: 14px;
      color: #666;
    }

    .room-description {
      font-size: 16px;
      color: #333;
    }

    .room-price {
      font-size: 16px;
      color: #00a0e9;
      font-weight: bold;
    }

    .room-capacity {
      font-size: 14px;
      color: #666;
    }

    /* Add styles for the model */
    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.8);
      justify-content: center;
      align-items: center;
      z-index: 2;
    }

    .modal-content {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      max-width: 800px;
      max-height: 90%;
      overflow: auto;
    }
    /* Add styles for the "Book" button */
    .book-button {
      position: absolute;
      bottom: 10px;
      right: 10px;
      padding: 10px 20px;
      background-color: #00a0e9;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      width: 240px;
      height: 70px;
    }

    .book-button:hover {
      background-color: #0075b3;
    }
    .room_type{
        
    }

  </style>
</head>
<body>
  <!-- Room Listing -->
  <div class="room_type"><h2>Hot Rooms</h2></div>
  <div class="room-container">
    @foreach ($rooms as $room)
      <div class="room-card" onclick="showModel(this)">
        <img src="{{ asset('storage/' . $room->image) }}" alt="Room Image">
        <div class="room-info">
          <span class="room-number">Room number: {{ $room->room_number }}</span>
          <span class="room-floor">Floor: {{ $room->floor }}</span>
          <p class="room-description">Description: {{ $room->description }}</p>
          <span class="room-price">Price: ${{ $room->price }}</span>
          <span class="room-capacity">Capacity: {{ $room->capacity }}</span>
        </div>
      </div>
    @endforeach
  </div>

  <div class="modal" onclick="hideModal()">
    <div class="modal-content">
      <img src="{{ asset('storage/' . $room->image) }}" alt="Room Image">
      <h2 id="modal-title">Room number</h2>
      <p id="modal-description">Description: </p>
      <p id="modal-floor">Floor: </p>
      <span id="modal-price">Price: $0</span>
      <span id="modal-capacity">Capacity: 0</span>

      <!-- Add the "Book" button -->
      <button class="book-button">Book Now</button>
    </div>
  </div>

  <script>
    function showModel(roomCard) {const modal = document.querySelector('.modal');
      const modalContent = modal.querySelector('.modal-content');

      // Get room details from the clicked room card
      const roomInfo = roomCard.querySelector('.room-info');
      const roomNumber = roomInfo.querySelector('.room-number').innerText;
      const roomDescription = roomInfo.querySelector('.room-description').innerText;
      const roomFloor = roomInfo.querySelector('.room-floor').innerText;
      const roomPrice = roomInfo.querySelector('.room-price').innerText;
      const roomCapacity = roomInfo.querySelector('.room-capacity').innerText;

      // Set room details in the modal
      const modalTitle = modalContent.querySelector('#modal-title');
      const modalDescription = modalContent.querySelector('#modal-description');
      const modalFloor = modalContent.querySelector('#modal-floor');
      const modalPrice = modalContent.querySelector('#modal-price');
      const modalCapacity = modalContent.querySelector('#modal-capacity');

      modalTitle.innerText = roomNumber;
      modalDescription.innerText = 'Description: ' + roomDescription;
      modalFloor.innerText = 'Floor: ' + roomFloor;
      modalPrice.innerText = roomPrice;
      modalCapacity.innerText = roomCapacity;

      modal.style.display = 'flex';
    }

    function hideModal() {
      const modal = document.querySelector('.modal');
      modal.style.display = 'none';
    }
  </script>
</body>
</html>