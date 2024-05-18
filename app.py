from flask import Flask, request, jsonify
import geopy
from math import sin, cos, acos, radians
from flask_cors import CORS  # Import CORS

app = Flask(__name__)
CORS(app)  # Enable CORS for all domains and all routes

@app.route('/process_data', methods=['POST'])
def process_data():
    try:
        data = request.get_json()
        pickup_location = data.get('pickupLocation')
        delivery_location = data.get('deliveryLocation')

        Picklocation = geopy.geocoders.Nominatim(user_agent="my_geocoder").geocode(pickup_location)
        Deliverylocation = geopy.geocoders.Nominatim(user_agent="my_geocoder").geocode(delivery_location)

        Picklatitude = Picklocation.latitude
        Picklongitude = Picklocation.longitude

        Deliverylatitude = Deliverylocation.latitude
        Deliverylongitude = Deliverylocation.longitude

        distance = calculate_distance(Picklatitude, Picklongitude, Deliverylatitude, Deliverylongitude)
        response = jsonify({"distance": distance}) 

        return response
    except Exception as e:
        return jsonify({"error": str(e)})

def calculate_distance(pickup_lat, pickup_lon, delivery_lat, delivery_lon):
    pickup_lat_rad = radians(pickup_lat)
    pickup_lon_rad = radians(pickup_lon)
    delivery_lat_rad = radians(delivery_lat)
    delivery_lon_rad = radians(delivery_lon)

    dis = acos(sin(pickup_lat_rad) * sin(delivery_lat_rad) + cos(pickup_lat_rad) * cos(delivery_lat_rad) * cos(delivery_lon_rad - pickup_lon_rad)) * 6371

    return dis

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5000, debug=True)
