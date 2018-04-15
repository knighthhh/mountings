from time import sleep

from scheduler import Scheduler
from db import MongoClient
import multiprocessing
import threading

def main():
    print('程序开始运行。。')
    s = Scheduler()
    s.run()



if __name__ == '__main__':
    main()
    # for i in range(2):
    #     p = multiprocessing.Process(target=main)
    #     p.start()
    #     sleep(5)

