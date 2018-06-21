import csv
import json
import pandas as pd
import numpy as np


df=pd.read_json("SampleInput_2.json")

#print df
df.to_csv('output.csv', encoding='utf-8', index=False)
df=pd.read_csv('output.csv')
df_ = pd.DataFrame()
df1_=pd.DataFrame()


df.to_csv('output.csv', encoding='utf-8', index=False)
df=pd.read_csv('output.csv')

cols=df.select_dtypes(include=pd.np.number).columns.tolist()
col1 = df.select_dtypes(exclude=pd.np.number).columns.tolist()
#col1=col1[0] 


col_order=cols+col1
print "col oder"
print len(col1)

print col_order[0:len(col_order)-1]

if len(col1)>1:
    col_order=col_order[0:len(col_order)-1]


df = df[col_order]

print df





#total = df.select_dtypes(pd.np.number).sum()

id=df.select_dtypes(pd.np.number).idxmax()
x=len(id)
id1=df.select_dtypes(pd.np.number).idxmin()
y=len(id1)


#df1=df.iloc[id,:]
df1=df.select_dtypes(exclude=pd.np.number)
df1=df1.iloc[id,:]

df2=df.select_dtypes(exclude=pd.np.number)
df2=df2.iloc[id1,:]


df_['max']=df.select_dtypes(pd.np.number).max()
df1_['min']=df.select_dtypes(pd.np.number).min()



list=[]

for i in range(0,x):
    list.insert(i,"Yes"+str(i))

print list    

df_= df_.T
df_columns=[list]
print df_
df1= df1.T
df1.columns=list

df1_= df1_.T
df1_columns=list
df2= df2.T
df2.columns=list



df_max=pd.concat([df_,df1,df1_,df2])
cols=df_max.select_dtypes(include=pd.np.number).columns.tolist()
col1 = df_max.select_dtypes(exclude=pd.np.number).columns.tolist()
#col1=col1[0] 

col_order=cols+col1
#print cols
#print col1
df_max = df_max[col_order]

print df_max

for i in range(0,len(col1)):
    df_max.iloc[1,i]=df_max.iloc[1,i+len(col1)]


for i in range(0,len(col1)):
    df_max.iloc[3,i]=df_max.iloc[3,i+len(col1)]



df_max.drop(list, axis=1, inplace=True)

#df_max=df_max.T

df_max = df_max.reset_index()

print df_max
#df_max.columns=['first','second','third','fourth']
#out = df_max.to_json(orient='records')

#with open('file_name.json', 'w') as f:
#    f.write(out)

df_max.to_csv('summary.csv',encoding='utf-8')


out = df_max.to_json(orient='records')






with open('file_name.json', 'w') as f:
    f.write(out)



