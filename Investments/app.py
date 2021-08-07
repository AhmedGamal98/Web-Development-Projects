from flask import Flask,request,json,jsonify    #pip install Flask && pip install -v scikit-learn==0.23.1
import numpy as np                              #pip install numpy
import pandas as pd 

app = Flask(__name__)

@app.route('/recommend/',methods=['GET', 'POST'])
def recommend():
    data = request.get_json()
    cat = []
    ints = []
    ideas = []
    for i in data['cat']:
        cat.append(i)

    for i in data['ints']:
        ints.append(i)
     
    for i in data['ideas']:
        ideas.append(i)
    
    ideas1 =[]
    for i in cat:
        x = 0
        if i == ideas[x]:
            ideas1.append(1)
        else:
           ideas1.append(0)
        x +=1 

    cats1 =[]
    for i in ideas:
        x = 0
        if i == cat[x]:
            cats1.append(1)
        else:
           cats1.append(0)
        x +=1    
    cats1= np.array(cats1)
    ideas1= np.array(ideas1)
    #result = cats1.dot(ideas1)     

                 
    result = list(set(ideas).intersection(set(ints)))
    return app.response_class(
        response=json.dumps(result, ensure_ascii=False),
        status=200,
        mimetype='application/json'  
    )

if __name__ == '__main__':
    app.config['TEMPLATES_AUTO_RELOAD'] = True
    app.run(debug = False)