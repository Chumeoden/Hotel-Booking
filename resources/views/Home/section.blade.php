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

    /* Drop-up frame styles */
    .dropup-content {
      display: none;
      position: absolute;
      bottom: 100%;
      left: 50%;
      transform: translateX(-50%);
      width: 1020px;
      height: 720px;
      background-color: #f9f9f9;
      padding: 10px;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .room-card.show-dropup .dropup-content {
      display: block;
    }

    .enlarged-dropup-content {
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

    .room-card.show-enlarged-dropup .enlarged-dropup-content {
      display: flex;
    }

    .enlarged-content {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      max-width: 800px;
      max-height: 90%;
      overflow: auto;
    }
  </style>
</head>
<body>
  <!-- Room Listing -->
  <div class="room-container">

  @foreach ($rooms as $room)
    <div class="room-card" onclick="toggleDropup(this)">
      <img src="{{ asset('storage/' . $room->image) }}" alt="Room Image">
      <div class="room-info">
        <span class="room-number">Room number: {{ $room->room_number }}</span>
        <span class="room-floor">Floor: {{ $room->floor }}</span>
        <p class="room-description">Description: {{ $room->description }}</p>
        <span class="room-price">Price: ${{ $room->price }}</span>
        <span class="room-capacity">Capacity: {{ $room->capacity }}</span>
      </div>
      <!-- Drop-up content -->
      <div class="dropup-content">
      <img src="{{ asset('storage/' . $room->image) }}" alt="Room Image">
      <div class="room-info">
        <span class="room-number">Room number: {{ $room->room_number }}</span>
        <span class="room-floor">Floor: {{ $room->floor }}</span>
        <p class="room-description">Description: {{ $room->description }}</p<span class="room-price">Price: ${{ $room->price }}</span>
        <span class="room-capacity">Capacity: {{ $room->capacity }}</span>
      </div>
        <button onclick="showEnlargedDropup(this)">View More Details</button>
      </div>
    </div>
  @endforeach

  </div>

  <!-- Enlarged Drop-up Content -->
  <div class="enlarged-dropup-content" onclick="hideEnlargedDropup(this)">
    <div class="enlarged-content">
      <!-- Add your enlarged drop-up content here -->
      <h2>Enlarged Drop-up Content</h2>
      <p>This is the enlarged drop-up content with more details about the product.</p>
    </div>
  </div>

  <script>
    function toggleDropup(roomCard) {
      roomCard.classList.toggle('show-dropup');
    }

    function showEnlargedDropup(button) {
      const roomCard = button.closest('.room-card');
      roomCard.classList.add('show-enlarged-dropup');
    }

    function hideEnlargedDropup(enlargedDropupContent) {
      enlargedDropupContent.classList.remove('show-enlarged-dropup');
    }
  </script>
</body>
</html>