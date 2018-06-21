import re
import json
import numpy as np
import os

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
        json_data=json.loads(data)
        for i in json_data:
            self.list_of_sub_category.append(i.get('Sub-Category'))
            self.list_actual.append(i.get('SUM(Profit)'))
            self.list_of_sum_profit.append(int(i.get('SUM(Profit)').replace('$','').replace(',','')))
        
        max1=max(self.list_of_sum_profit)
        min1=min(self.list_of_sum_profit)
        median1=np.median(self.list_of_sum_profit)
        """
        output=[{self.list_of_sub_category[self.list_of_sum_profit.index(max1)]:self.list_actual[self.list_of_sum_profit.index(max1)],
                self.list_of_sub_category[self.list_of_sum_profit.index(min1)]: self.list_actual[self.list_of_sum_profit.index(min1)],
                'median':median1}]
        """

        output={"dashboards":[{"name": "Sales","KPI": {"first":self.list_of_sub_category[self.list_of_sum_profit.index(max1)],"second":self.list_of_sub_category[self.list_of_sum_profit.index(min1)],"third":"median"},"Measures" :{"first" :self.list_actual[self.list_of_sum_profit.index(max1)],"second" :self.list_actual[self.list_of_sum_profit.index(min1)],"third" : median1}}]}
        #self.output_file = open(self.output_file, "wb", encoding="utf8")
        #self.output_file.write(json.dumps(output))
        
        #return output
        s=json.dumps(output)
        #return s
        with open("testoutput.json",'w') as f:
            f.write(s + "\n")
        







test=Derive_Stats()
print (test.stat_result(r'Input_Sample1.json',r'output.json'))