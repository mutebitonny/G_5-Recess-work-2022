#include<stdio.h>
int main()
{
	printf("**KinderCare Alphabet App**\n");
	int m[7][4];
	for(int i=0;i<7;i++){
	for(int j=0;j<4;j++)
	{
		scanf("%d", &m[i][j]);
	}
}
for(int i=0;i<7;i++){
for(int j=0;j<4;j++){
	if(m[i][j]==1)
	{
		printf("*");
	}
	else if(m[i][j]==0)
	{
		printf(" ");
	}
	else{
		printf("invalid input");
	}
}
printf("\n");	
}
return 0;
}
