from flask import Flask,request,json,jsonify    #pip install Flask &&  pip install -v scikit-learn==0.23.1
import numpy as np                              #pip install numpy
import pickle                                   #pip install pickle-mixin
filename = 'najah_model.h5'
model = pickle.load(open(filename, 'rb'))

app = Flask(__name__)

@app.route('/predict/',methods=['GET', 'POST'])
def predict():
    data = request.get_json()
    
    x = np.array(data['answer']).reshape(1,-1)
    preds = model.predict_proba(x)
    fail= int(round(preds[0][0]*100))
    success= int(round(preds[0][1]*100))
     
    result_dict = {"fail": fail,"success":success}
    
    return app.response_class(
        response=json.dumps(result_dict, ensure_ascii=False),
        status=200,
        mimetype='application/json'  
    )

if __name__ == '__main__':
    app.config['TEMPLATES_AUTO_RELOAD'] = True
    app.run(debug = False)