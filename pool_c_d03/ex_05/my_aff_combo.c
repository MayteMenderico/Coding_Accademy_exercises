#include<unistd.h>

void my_putchar(char c);
int my_aff_comb()

    {
        int i;
	int j;
	int k;
	int first_element = 1;

	for(i = 0; i < 10; ++i) 
	{
		for(j = 1 + i; j < 10; ++j)
		{
			for(k = 1 + j; k < 10; ++k)
			
			{
				if (first_element == 1) {
					first_element = 0;
				}
				else {
				        my_putchar(',');
					my_putchar(' ');
				
				}		
								
				my_putchar(i + 48);
				my_putchar(j + 48);
				my_putchar(k + 48);
				
			}
		}
	}
}

int main ()
{
	my_aff_comb();
	return (0);
}

