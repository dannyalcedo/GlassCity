/*

This code is a framework for the classes and 
methods of GlassCity which will be implemented in Unity.

GlassCity will be mostly written in C#,
but this framework is written in C++  
for simplicity and ease-of-understanding.

*/

#include <iostream>
#include <vector> 
using namespace std;

class Player {
    int xLocation, yLocation;
    string name;
};

class Settings {
    float radius;
    int level;
};


class Map {
    void createCircle(int, int, float); //from Player x,y and Settings radius create circle to show
    void showMovement(int, int); //from change in Player x,y, show player movement
    void checkWin(int, int, int); //check if in winning radius, established from Objective searchRadius and VirtualPlayer location x,y. 
};

class Objective {
    double time;
    int searchRadius;
    
    private:
      vector<MiniGames> clues; //vector of minigames that player will be expected to play to receive the clues
};

class VirtualPlayer {
    string id;
  
    private:
      int xLocation, yLocation;
};

class MiniGames {
    int type; //either trivia (1) minigame or compass (2) minigame
    bool result;
  
    void reward(bool); //method to impact player positively if wins minigame
    void punish(bool); //method to impact player negatively if loses minigame
};
