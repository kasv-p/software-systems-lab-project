time_limit, grid_size, no_of_trees = map(int,input().split())

trees = []
temp1 = temp2 = temp3 = temp4 = []
uProfit=0
rProfit=0
lProfit=0
dProfit=0
# calculate_profit function
def cal_profit():
    currentProfit = 0

    # calculating upprofit
    upProfit(trees[0])
    currentProfit = uProfit
    direction = 0
    downProfit(trees[0])
    if dProfit > currentProfit:
        currentProfit = dProfit
        direction = 1
    rightProfit(trees[0])
    if rProfit > currentProfit:
        currentProfit = rProfit
        direction = 2
    leftProfit(trees[0])
    if lProfit > currentProfit:
        currentProfit = lProfit
        direction = 3
    return direction,currentProfit

#upProfit function
def upProfit(near_tree):
    global uProfit
    uptrees = sorted([i for i in trees if near_tree["x"] == i["x"] and near_tree["y"] < i["y"]],key=lambda j: j["y"])
    if len(uptrees) != 0:
        if near_tree["h"] > abs(uptrees[0]["position"] - near_tree["position"]) and near_tree["weight"] > uptrees[0]["weight"]:
            uProfit += uptrees[0]["value"]
            temp1.append(uptrees[0])
            upProfit(uptrees[0])

#downProfit function
def downProfit(near_tree):
    global dProfit
    downtrees = sorted([i for i in trees if near_tree["x"] == i["x"] and near_tree["y"] > i["y"]],key=lambda j: j["y"])
    if len(downtrees) != 0:
        if near_tree["h"] > abs(downtrees[0]["position"] - near_tree["position"]) and near_tree["weight"] > downtrees[0]["weight"]:
            dProfit += downtrees[0]["value"]
            temp2.append(downtrees[0])
            downProfit(downtrees[0])



# rightProfit function
def rightProfit(near_tree):
    global rProfit
    righttrees = sorted([i for i in trees if near_tree["y"] == i["y"] and near_tree["x"] < i["x"]],key = lambda j: j["x"])
    if len(righttrees) != 0:
        if near_tree["h"] > abs(righttrees[0]["position"] - near_tree["position"]) and near_tree["weight"] < righttrees[0]["weight"]:
            rProfit += righttrees[0]["value"]
            temp3.append(righttrees[0])
            rightProfit(righttrees[0])

# leftProfit function
def leftProfit(near_tree):
    global lProfit
    lefttrees = sorted([i for i in trees if near_tree["y"] == i["y"] and near_tree["x"] > i["x"]],key = lambda j: j["x"])
    if len(lefttrees) != 0:
        if near_tree["h"] > abs(lefttrees[0]["position"] - near_tree["position"]) and near_tree["weight"] > lefttrees[0]["weight"]:
            lProfit += lefttrees[0]["value"]
            temp4.append(lefttrees[0])
            leftProfit(lefttrees[0])


def path():
    list = []
    for i in trees:
        if abs(i["x"]-current_x)+abs(i["y"]-current_y)+i["d"] <= t:
            list += [i]
    list.sort(key = lambda x: (-(x["value"]/(abs(x["x"]-current_x)+abs(x["y"]-current_y))),(x["x"]-current_x)**2 + (x["y"]-current_y)**2,-(x["value"])))
    return list

#-----------------------------------------------------------------------------------------------------------------

# taking input of properties for each tree in a list of dicts
for i in range(no_of_trees):
    x, y, h, d, c, p = map(int,input().split())
    trees += [{"position":x+y,"x":x,"y":y,"h":h,"d":d,"c":c,"p":p, "value":p*h*d, "weight":c*d*h}]

# sorting based on position of tree from origin


time = 0
total_price = 0
current_x = current_y = 0
t = time_limit
count = 0

trees.sort(key = lambda x: (x["x"]-current_x)**2 + (x["y"]-current_y)**2)

# moving
while time <= time_limit and len(trees)>1:

    if time  <= time_limit:
        direction,final_profit = cal_profit()

        if current_x < trees[0]["x"]:
            print("move right\n"* min(t,trees[0]["x"]-current_x),end="")
            t -= trees[0]["x"]-current_x

        elif current_x > trees[0]["x"]:
            print("move left\n"* min(t,current_x-trees[0]["x"]),end="")
            t -= current_x-trees[0]["x"]

        if current_y < trees[0]["y"]:
            print("move up\n"* min(t,trees[0]["y"]-current_y ),end="")
            t -= trees[0]["y"]-current_y

        elif current_y > trees[0]["y"]:
            print("move down\n"* min(t,current_y-trees[0]["y"]),end="")
            t -= current_y-trees[0]["y"]

#-------------------cutting trees ------------
        a=[]
        if direction == 0 and (t - trees[0]["d"]) >= 0 :
            print("cut up")
            a = temp1
            t -= trees[0]["d"]

        elif direction == 1 and (t - trees[0]["d"]) >= 0:
            print("cut down")
            a = temp2
            t -= trees[0]["d"]

        elif direction == 2 and (t - trees[0]["d"]) >= 0:
            print("cut right")
            a = temp3
            t -= trees[0]["d"]

        elif direction == 3 and (t - trees[0]["d"]) >= 0:
            print("cut left")
            a = temp4
            t -= trees[0]["d"]

        time += trees[0]["d"] + abs(trees[0]["x"]-current_x)+abs(trees[0]["y"]-current_y)

        current_x = trees[0]["x"]
        current_y = trees[0]["y"]
        trees.remove(trees[0])
        if len(a) != 0 :
            for i in a:
                trees.remove(i)
        print(uProfit,rProfit,lProfit,dProfit)
        temp1 = temp2 = temp3 = temp4 = []
        uProfit = rProfit = dProfit = lProfit = 0
        trees = path()