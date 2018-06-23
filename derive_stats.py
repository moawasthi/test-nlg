import re
import json
import base64
import numpy as np
import os
import sys


class Derive_Stats:
    input_file=open(r'Input_Sample1.json','r')
    output_file = open(r'output.json', 'wb')
    input_file=None
    output_file=None
    list_of_sub_category=[]
    list_of_sum_profit=[]
    list_actual=[]
    def stat_result(self,input,output):
        self.input_file=open(input,'r')
        self.output_file=open(output,'wb')
        data = self.input_file.read()
        json_data = json.loads(base64.b64decode(sys.argv[1]))
        #json_data = json.loads(sys.argv[1])
        json_decoded = json.loads(json_data)
        return json_decoded
            #return json_data[0]
        """
        for i in json_data:
            self.list_of_sub_category.append(i.get('Sub-Category'))
            self.list_actual.append(i.get('SUM(Profit)'))
            if not isinstance(i.get('SUM(Profit)'), int): 
            
                self.list_of_sum_profit.append(int(i.get('SUM(Profit)').replace('$','').replace(',','')))
            else :
                self.list_of_sum_profit.append(int(i.get('SUM(Profit)')))
                max1=max(self.list_of_sum_profit)
                min1=min(self.list_of_sum_profit)
                median1=np.median(self.list_of_sum_profit)
        
        output=[{self.list_of_sub_category[self.list_of_sum_profit.index(max1)]:self.list_actual[self.list_of_sum_profit.index(max1)],
                self.list_of_sub_category[self.list_of_sum_profit.index(min1)]: self.list_actual[self.list_of_sum_profit.index(min1)],
                'median':median1}]
        

        output={"dashboards":[{"name": "Sales","KPI": {"first":self.list_of_sub_category[self.list_of_sum_profit.index(max1)],"second":self.list_of_sub_category[self.list_of_sum_profit.index(min1)],"third":"median"},"Measures" :{"first" :self.list_actual[self.list_of_sum_profit.index(max1)],"second" :self.list_actual[self.list_of_sum_profit.index(min1)],"third" : median1}}]}
        #self.output_file = open(self.output_file, "wb", encoding="utf8")
        #self.output_file.write(json.dumps(output))
        """
        #return output
        #s=json.dumps(output)
        #return json_data
        #with open("testoutput.json",'w') as f:
         #   f.write(s + "\n")
        







test=Derive_Stats()
print (test.stat_result(r'Input_Sample1.json',r'output.json'))
