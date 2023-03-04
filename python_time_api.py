from flask import Flask, jsonify
import datetime

app = Flask(__name__)

@app.route('/api/time')
def get_time():
    now = datetime.datetime.now()
    time_str = now.strftime('%Y-%m-%d %H:%M:%S')
    return jsonify({'time': time_str})

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=8000)